import React from "react";
import { BrowserRouter, Route, Switch } from "react-router-dom";
import App from "../containers/app";
import Footer from "../containers/form";
import Profile from "../containers/profile";

export default () => (
  // eslint-disable-next-line no-unused-expressions
  <BrowserRouter>
    <Switch>
      <Route path="/" exact render={() => <App />} />
      <Route path="/form" render={() => <Footer />} />
      <Route path="/profile" render={() => <Profile />} />
    </Switch>
  </BrowserRouter>
);
