import React from "react";

function Header() {
  return (
    <header className="masthead">
      <div className="container h-100">
        <div className="row h-100">
          <div className="col-lg-12 my-auto">
            <div className="header-content mx-auto">
              <a
                href="#download"
                className="btn btn-outline btn-lg js-scroll-trigger"
                style={{ "margin-bottom": "25px", width: "400px" }}
              >
                Business Profile
              </a>
              <br />
              <a
                href="#download"
                className="btn btn-outline btn-lg js-scroll-trigger"
                style={{ "margin-bottom": "25px", width: "400px" }}
              >
                Create Purchase Order
              </a>
              <br />
              <a
                href="#download"
                className="btn btn-outline btn-lg js-scroll-trigger"
                style={{ "margin-bottom": "25px", width: "400px" }}
              >
                Find Supplier
              </a>
              <br />
              <a
                href="#download"
                className="btn btn-outline btn-lg js-scroll-trigger"
                style={{ "margin-bottom": "25px", width: "400px" }}
              >
                Find Supplier
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>
  );
}

export default Header;
