import { useState } from "react";
import { useNavigate } from "react-router-dom";
import "../css/PostForms.css";

const API_URL = "http://localhost/react-blog/api/index.php";

function CreatePost() {
  const navigate = useNavigate();

  const [title, setTitle] = useState("");
  const [content, setContent] = useState("");

  const handleTitleChange = (event) => {
    setTitle(event.target.value);
  };

  const handleContentChange = (event) => {
    setContent(event.target.value);
  };

  const handleSavePost = async () => {
    const now = new Date();
    const date = now.toISOString().slice(0, 10);
    const time = now
      .toLocaleTimeString("en-US", { hour12: false })
      .replace("24", "00");

    const post = {
      title: title,
      content: content,
      post_date: date,
      post_time: time,
    };

    const requestOptions = {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify(post),
    };

    try {
      await fetch(`${API_URL}/add_post`, requestOptions);
      navigate(`/`);
    } catch (error) {
      console.error(error);
    }
  };

  return (
    <form className="edit-post-form">
      <div>
        <h2>Create New Post</h2>
        <label>Title:</label>
        <input type="text" value={title} onChange={handleTitleChange} />
      </div>
      <div>
        <label>Content:</label>
        <textarea rows="10" value={content} onChange={handleContentChange} />
      </div>
      <button type="button" onClick={handleSavePost}>
        Save Post
      </button>
    </form>
  );
}

export default CreatePost;
