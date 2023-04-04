import Footer from "./Footer";
import Header from "./Header";
import Navbar from "./NavBar";
import "../css/App.css";


function App() {
  return (
    <>
      <div className="page-container">
        <div className="page-content">
          <Header />
          <Navbar />
        </div>
        <Footer className="page-footer" />
      </div>
    </>
  );
}

export default App;
