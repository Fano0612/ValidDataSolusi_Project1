import React from "react";
import {
  MDBFooter,
  MDBContainer,
  MDBRow,
  MDBCol,
  MDBIcon,
} from "mdb-react-ui-kit";

function Footer() {
  return React.createElement(
    MDBFooter,
    { bgColor: "light", className: "text-center text-lg-start text-muted" },
    React.createElement(
      "section",
      {
        className:
          "d-flex justify-content-center justify-content-lg-between p-4 border-bottom",
      },
      React.createElement(
        "div",
        { className: "me-5 d-none d-lg-block" },
        React.createElement(
          "span",
          null,
          "Get connected with us on social networks:",
        ),
      ),
      React.createElement(
        "div",
        null,
        React.createElement(
          "a",
          { href: "", className: "me-4 text-reset" },
          React.createElement(MDBIcon, {
            color: "secondary",
            fab: true,
            icon: "facebook-f",
          }),
        ),
        React.createElement(
          "a",
          { href: "", className: "me-4 text-reset" },
          React.createElement(MDBIcon, {
            color: "secondary",
            fab: true,
            icon: "twitter",
          }),
        ),
        React.createElement(
          "a",
          { href: "", className: "me-4 text-reset" },
          React.createElement(MDBIcon, {
            color: "secondary",
            fab: true,
            icon: "google",
          }),
        ),
        React.createElement(
          "a",
          { href: "", className: "me-4 text-reset" },
          React.createElement(MDBIcon, {
            color: "secondary",
            fab: true,
            icon: "instagram",
          }),
        ),
        React.createElement(
          "a",
          { href: "", className: "me-4 text-reset" },
          React.createElement(MDBIcon, {
            color: "secondary",
            fab: true,
            icon: "linkedin",
          }),
        ),
        React.createElement(
          "a",
          { href: "", className: "me-4 text-reset" },
          React.createElement(MDBIcon, {
            color: "secondary",
            fab: true,
            icon: "github",
          }),
        ),
      ),
    ),
    React.createElement(
      "section",
      null,
      React.createElement(
        MDBContainer,
        { className: "text-center text-md-start mt-5" },
        React.createElement(
          MDBRow,
          { className: "mt-3" },
          React.createElement(
            MDBCol,
            { md: "3", lg: "4", xl: "3", className: "mx-auto mb-4" },
            React.createElement(
              "h6",
              { className: "text-uppercase fw-bold mb-4" },
              React.createElement(MDBIcon, {
                color: "secondary",
                icon: "gem",
                className: "me-3",
              }),
              "MVP Club",
            ),
            React.createElement(
              "p",
              null,
              "An app that utilizes a point-based system, allowing its members to redeem points in exchange for gifts.",
            ),
          ),
          React.createElement(
            MDBCol,
            { md: "2", lg: "2", xl: "2", className: "mx-auto mb-4" },
            React.createElement(
              "h6",
              { className: "text-uppercase fw-bold mb-4" },
              "Products",
            ),
            React.createElement(
              "p",
              null,
              React.createElement(
                "a",
                { href: "#!", className: "text-reset" },
                "Angular",
              ),
            ),
            React.createElement(
              "p",
              null,
              React.createElement(
                "a",
                { href: "#!", className: "text-reset" },
                "React",
              ),
            ),
            React.createElement(
              "p",
              null,
              React.createElement(
                "a",
                { href: "#!", className: "text-reset" },
                "Vue",
              ),
            ),
            React.createElement(
              "p",
              null,
              React.createElement(
                "a",
                { href: "#!", className: "text-reset" },
                "Laravel",
              ),
            ),
          ),
          React.createElement(
            MDBCol,
            { md: "3", lg: "2", xl: "2", className: "mx-auto mb-4" },
            React.createElement(
              "h6",
              { className: "text-uppercase fw-bold mb-4" },
              "Useful links",
            ),
            React.createElement(
              "p",
              null,
              React.createElement(
                "a",
                { href: "#!", className: "text-reset" },
                "Pricing",
              ),
            ),
            React.createElement(
              "p",
              null,
              React.createElement(
                "a",
                { href: "#!", className: "text-reset" },
                "Settings",
              ),
            ),
            React.createElement(
              "p",
              null,
              React.createElement(
                "a",
                { href: "#!", className: "text-reset" },
                "Orders",
              ),
            ),
            React.createElement(
              "p",
              null,
              React.createElement(
                "a",
                { href: "#!", className: "text-reset" },
                "Help",
              ),
            ),
          ),
          React.createElement(
            MDBCol,
            { md: "4", lg: "3", xl: "3", className: "mx-auto mb-md-0 mb-4" },
            React.createElement(
              "h6",
              { className: "text-uppercase fw-bold mb-4" },
              "Contact",
            ),
            React.createElement(
              "p",
              null,
              React.createElement(MDBIcon, {
                color: "secondary",
                icon: "home",
                className: "me-2",
              }),
              "Malang, East Java",
            ),
            React.createElement(
              "p",
              null,
              React.createElement(MDBIcon, {
                color: "secondary",
                icon: "envelope",
                className: "me-3",
              }),
              "validdatasolusi@gmail.com",
            ),
            React.createElement(
              "p",
              null,
              React.createElement(MDBIcon, {
                color: "secondary",
                icon: "phone",
                className: "me-3",
              }),
              "+6285933100158",
            ),
            React.createElement(
              "p",
              null,
              React.createElement(MDBIcon, {
                color: "secondary",
                icon: "print",
                className: "me-3",
              }),
              "+6285933100158",
            ),
          ),
        ),
      ),
    ),
    React.createElement(
      "div",
      {
        className: "text-center p-4",
        style: { backgroundColor: "rgba(0, 0, 0, 0.05)" },
      },
      "\u00A9 2023 Copyright: ",
      React.createElement(
        "a",
        {
          className: "text-reset fw-bold",
          href: "https://pt-valid-data-solusi.business.site/",
        },
        "PT. Valid Data Solusi",
      ),
    ),
  );
}

export default Footer;
