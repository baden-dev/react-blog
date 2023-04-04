import React from "react";

function Header() {
  return (
    <div>
      <header>
        <img
          src={process.env.PUBLIC_URL + "/blog-header.png"}
          alt="The Write Stuff Blog"
          style={{ width: "100%" }}
        />
      </header>
    </div>
  );
}

export default Header;
