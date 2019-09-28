import React from "react";

function Footer() {
  return (
    <footer>
      <div className="container">
        <p>&copy; Your Website 2019. All Rights Reserved.</p>
        <ul className="list-inline">
          <li className="list-inline-item">
            <a href="privacy#">Privacy</a>
          </li>
          <li className="list-inline-item">
            <a href="terms#">Terms</a>
          </li>
          <li className="list-inline-item">
            <a href="faq#">FAQ</a>
          </li>
        </ul>
      </div>
    </footer>
  );
}

export default Footer;
