// Main JavaScript file for BlueBovine website

document.addEventListener('DOMContentLoaded', function() {
    // Check if we're on the login page
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
        setupLoginForm();
    }

    // Check if we're on the affiliate dashboard
    const affiliateDashboard = document.querySelector('.affiliate-dashboard');
    if (affiliateDashboard) {
        checkAuthentication();
    }
});

// Authentication check - redirects to login if not authenticated
function checkAuthentication() {
    const isAuthenticated = sessionStorage.getItem('authenticated');
    if (!isAuthenticated) {
        window.location.href = 'sign-in.html';
    } else {
        // Display the affiliate name (would normally come from a server)
        const affiliateNameElement = document.getElementById('affiliateName');
        if (affiliateNameElement) {
            affiliateNameElement.textContent = sessionStorage.getItem('username') || 'Affiliate';
        }
    }
}

// Set up login form validation and submission
function setupLoginForm() {
    const loginForm = document.getElementById('loginForm');
    const loginMessage = document.getElementById('loginMessage');

    loginForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;
        
        if (username && password) {
            // Using atob() to decode base64-encoded credentials
            // Replace these encoded strings with your own base64-encoded credentials
            // Example: To encode "admin", use btoa("admin") in console which gives "YWRtaW4="
            const encodedValidUsername = "Si5TcGVuY2VyQHNraXB0b25jb3VuY2lsLmdvdi51aw=="; // Add your base64-encoded username here
            const encodedValidPassword = "RjFSZWRidWxsNTY="; // Add your base64-encoded password here
            
            // Decode the credentials for comparison
            const validUsername = encodedValidUsername ? atob(encodedValidUsername) : "";
            const validPassword = encodedValidPassword ? atob(encodedValidPassword) : "";
            
            // Validate against decoded credentials
            const isValid = (username === validUsername && password === validPassword);
            
            if (isValid) {
                loginMessage.textContent = "Login successful! Redirecting...";
                loginMessage.className = "login-message login-success";
                
                // Store authentication state for this session
                sessionStorage.setItem('authenticated', 'true');
                sessionStorage.setItem('username', username);
                
                // Redirect to affiliate dashboard
                setTimeout(function() {
                    window.location.href = 'affiliate-stats.html';
                }, 1500);
            } else {
                loginMessage.textContent = "Invalid username or password";
                loginMessage.className = "login-message login-error";
            }
        } else {
            loginMessage.textContent = "Please enter both username and password";
            loginMessage.className = "login-message login-error";
        }
    });
}

// Helper function to format numbers with commas
function formatNumber(num) {
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

// Optional: Animation for stats when they come into view
function animateStats() {
    const statElements = document.querySelectorAll('.stat-number span');
    
    statElements.forEach(element => {
        const finalValue = parseInt(element.textContent);
        let startValue = 0;
        const duration = 1500;
        const startTime = performance.now();
        
        function updateCount(currentTime) {
            const elapsedTime = currentTime - startTime;
            if (elapsedTime < duration) {
                const progress = elapsedTime / duration;
                const currentValue = Math.floor(progress * finalValue);
                element.textContent = formatNumber(currentValue);
                requestAnimationFrame(updateCount);
            } else {
                element.textContent = formatNumber(finalValue);
            }
        }
        
        requestAnimationFrame(updateCount);
    });
}