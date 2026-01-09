<style>
/* container for the grid */
.library-grid {
  display: grid;
  /* responsive columns: creates as many 280px columns as fit on screen */
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 1.5rem;
  margin-top: 2rem;
}

/* individual activity card */
.activity-card {
  border: 1px solid #e1e4e8; /* standard github grey */
  border-radius: 6px;
  padding: 1.5rem;
  background: #ffffff;
  box-shadow: 0 2px 4px rgba(0,0,0,0.05);
  transition: transform 0.2s ease, box-shadow 0.2s ease;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

/* hover effect for interactivity cue */
.activity-card:hover {
  transform: translateY(-3px);
  box-shadow: 0 8px 16px rgba(0,0,0,0.1);
}

.activity-card h3 {
  margin-top: 0;
  margin-bottom: 0.5rem;
  font-size: 1.25rem;
}

.activity-meta {
  font-size: 0.85rem;
  color: #586069;
  margin-bottom: 1rem;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  font-weight: bold;
}

.activity-desc {
  font-size: 0.95rem;
  color: #24292e;
  line-height: 1.5;
  margin-bottom: 1.5rem;
  flex-grow: 1; /* pushes button to bottom */
}

/* mimic a button */
.btn-link {
  display: inline-block;
  padding: 0.5rem 1rem;
  color: #ffffff !important; /* force white text */
  background-color: #0366d6; /* github blue */
  text-decoration: none;
  border-radius: 4px;
  text-align: center;
  font-weight: 600;
  width: fit-content;
}

.btn-link:hover {
  background-color: #0255b3;
  text-decoration: none;
}
</style>
## Outreach Activity Library

Welcome to our resource hub. Please select the activity you are taking part in today.

<div class="library-grid">

  <div class="activity-card">
    <div>
      <div class="activity-meta">Network Security</div>
      <h3>Raspberry Pis and Wireshark</h3>
      <p class="activity-desc">
      Using a collection of hardware and software resources, create a network of devices and view encrypted and unencrypted traffic.
      </p>
    </div>
    <a href="" class="btn-link">View resource</a>
  </div>

  <div class="activity-card">
    <div>
      <div class="activity-meta">Cryptography</div>
      <h3>Encrypting and decrypting secrets</h3>
      <p class="activity-desc">
      Using tools developed by GCHQ to decrypt secret messages and encrypt your own.
      </p>
    </div>
    <a href="" class="btn-link">View resource</a>
  </div>

  <div class="activity-card">
    <div>
      <div class="activity-meta">OSINT</div>
      <h3>Open Source Intelligence</h3>
      <p class="activity-desc">
      Using an ethical hacker virtual machine, investigate your assignewd target. Build up an investigation!
      </p>
    </div>
    <a href="" class="btn-link">View resource</a>
  </div>

  <div class="activity-card">
    <div>
      <div class="activity-meta">Social Engineering</div>
      <h3>Hacking People - Investigation</h3>
      <p class="activity-desc">
      Investigate the daily lives of your targets and discover information about their lives. Use this information to hack into a target service.
      </p>
    </div>
    <a href="OSINT-README.md" class="btn-link">View resource</a>
  </div>

</div>