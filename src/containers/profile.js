import React from "react";
import Nav from "../components/profilenav";
import NavBarSide from "../components/sidenav/sidenav";
import ProfileBody from "../components/profilebody";
import Footer from "../components/footer";
import "../App.css";

function App() {
  return (
    <div>
      <Nav />
      <NavBarSide />
      <ProfileBody />
      <Footer />
    </div>
  );
}

export default App;
