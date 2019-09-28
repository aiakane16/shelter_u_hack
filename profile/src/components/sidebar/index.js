import React from "react";

function Sidebar() {
  return (
    <div className="sidebar" data-color="orange">
      <div className="logo">
        <a
          href="http://www.creative-tim.com"
          className="simple-text logo-normal"
        >
          Shelter
        </a>
      </div>
      <div className="sidebar-wrapper" id="sidebar-wrapper">
        <ul className="nav">
          <li className="active ">
            <a href="./dashboard.html">
              <i className="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="./icons.html">
              <i className="now-ui-icons education_atom"></i>
              <p>Business Profile</p>
            </a>
          </li>
          <li>
            <a href="./map.html">
              <i className="now-ui-icons location_map-big"></i>
              <p>Create Purchase Order</p>
            </a>
          </li>
          <li>
            <a href="./notifications.html">
              <i className="now-ui-icons ui-1_bell-53"></i>
              <p>Purchase Requests</p>
            </a>
          </li>
          <li>
            <a href="./user.html">
              <i className="now-ui-icons users_single-02"></i>
              <p>Track Confirmed Purchase</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  );
}

export default Sidebar;
