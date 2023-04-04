import { Route, Routes } from "react-router-dom";
import Footer from "./Footer";
import Header from "./Header";
import Navbar from "./NavBar";
import AllPosts from "./AllPosts";
import SinglePost from "./SinglePost";
import EditPost from "./EditPost";
import "../css/App.css";

function App() {
  return (
    <>
      <div className="page-container">
        <div className="page-content">
          <Header />
          <Navbar />
          <Routes>
            <Route path="/" element={<AllPosts />} />
            <Route path="/post/:post_id" element={<SinglePost />} />
            <Route path="/edit_post/:post_id" element={<EditPost />} />
          </Routes>
        </div>
        <Footer className="page-footer" />
      </div>
    </>
  );
}

export default App;
