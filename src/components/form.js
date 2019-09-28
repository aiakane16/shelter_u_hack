import React from "react";
import { Button, Form, FormGroup, Label, Input, FormText } from "reactstrap";

function ProcureForm() {
  return (
    <header className="masthead" style={{ height: "100%", width: "100%" }}>
      <div className="container h-100">
        <div className="row h-100">
          <div className="col-lg-12 my-auto">
            <div className="header-content mx-auto">
              <div className="container">
                <div className="row">
                  <div className="col-lg-12 mx-auto">
                    <Form style={{ "margin-top": "50px" }}>
                      <FormGroup>
                        <Label for="exampleEmail">Email</Label>
                        <Input
                          type="email"
                          name="email"
                          id="exampleEmail"
                          placeholder="with a placeholder"
                        />
                      </FormGroup>
                      <FormGroup>
                        <Label for="examplePassword">Password</Label>
                        <Input
                          type="password"
                          name="password"
                          id="examplePassword"
                          placeholder="password placeholder"
                        />
                      </FormGroup>
                      <FormGroup>
                        <Label for="exampleSelect">Select</Label>
                        <Input type="select" name="select" id="exampleSelect">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </Input>
                      </FormGroup>
                      <FormGroup>
                        <Label for="exampleSelectMulti">Select Multiple</Label>
                        <Input
                          type="select"
                          name="selectMulti"
                          id="exampleSelectMulti"
                          multiple
                        >
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </Input>
                      </FormGroup>
                      <FormGroup>
                        <Label for="exampleText">Text Area</Label>
                        <Input type="textarea" name="text" id="exampleText" />
                      </FormGroup>
                      <FormGroup>
                        <Label for="exampleFile">File</Label>
                        <Input type="file" name="file" id="exampleFile" />
                        <FormText color="black">
                          This is some placeholder block-level help text for the
                          above input. It's a bit lighter and easily wraps to a
                          new line.
                        </FormText>
                      </FormGroup>
                      <FormGroup tag="fieldset">
                        <legend>Radio Buttons</legend>
                        <FormGroup check>
                          <Label check>
                            <Input type="radio" name="radio1" /> Option one is
                            this and that—be sure to include why it's great
                          </Label>
                        </FormGroup>
                        <FormGroup check>
                          <Label check>
                            <Input type="radio" name="radio1" /> Option two can
                            be something else and selecting it will deselect
                            option one
                          </Label>
                        </FormGroup>
                        <FormGroup check disabled>
                          <Label check>
                            <Input type="radio" name="radio1" disabled /> Option
                            three is disabled
                          </Label>
                        </FormGroup>
                      </FormGroup>
                      <FormGroup check>
                        <Label check>
                          <Input type="checkbox" /> Check me out
                        </Label>
                      </FormGroup>
                      <Button>Submit</Button>
                    </Form>
                  </div>
                </div>
                <br />
                <br />
                <br />
                <br />
                <br />
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
  );
}

export default ProcureForm;
