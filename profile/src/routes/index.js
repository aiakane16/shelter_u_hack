import React from "react";
import { BrowserRouter, Route, Switch } from "react-router-dom";
import App from "../containers/app";

export default () => (
  // eslint-disable-next-line no-unused-expressions
  <BrowserRouter>
    <Switch>
      <Route path="/" exact render={() => <App />} />>
    </Switch>
  </BrowserRouter>
);
