import React from "react";
import { BrowserRouter, Route, Switch } from "react-router-dom";
import App from "../containers/app";
import Form from "../containers/form";

export default () => (
  // eslint-disable-next-line no-unused-expressions
  <BrowserRouter>
    <Switch>
      <Route path="/" exact render={() => <App />} />>
      <Route path="/form" render={() => <Form />} />>
    </Switch>
  </BrowserRouter>
);
