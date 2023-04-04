import { Link } from "react-router-dom";
import "../css/NavBar.css";

function Navbar() {
  return (
    <nav>
      <ul>
        <li>
          <Link to="/">Home</Link>
        </li>
        <li>
          <Link to="/create_post">Post</Link>
        </li>
      </ul>
    </nav>
  );
}

export default Navbar;
