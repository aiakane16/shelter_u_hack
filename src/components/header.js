import React from "react";

function Header() {
  return (
    <header className="masthead">
      <div className="container h-100">
        <div className="row h-100">
          <div className="col-lg-7 my-auto">
            <div className="header-content mx-auto">
              <h1 className="mb-5">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua
              </h1>
              <a
                href="#download"
                className="btn btn-outline btn-xl js-scroll-trigger"
              >
                Find Supplier
              </a>
            </div>
          </div>
          <div className="col-lg-5 my-auto">
            <div className="device-container">
              <div className="device-mockup iphone6_plus portrait white">
                <div className="device">
                  <div className="screen">
                    <img
                      src={process.env.PUBLIC_URL + "img/demo-screen-1.jpg"}
                      className="img-fluid"
                      alt=""
                    />
                  </div>
                  <div className="button"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
  );
}

export default Header;
