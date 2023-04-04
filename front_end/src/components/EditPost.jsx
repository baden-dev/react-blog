import { useState } from "react";
import { useLocation, useNavigate } from "react-router-dom";
import "../css/PostForms.css";

const API_URL = "http://localhost/react-blog/api/index.php";

function EditPost() {
  const navigate = useNavigate();
  const location = useLocation();
  const selectedPost = location.state;

  const [title, setTitle] = useState(selectedPost.title);
  const [content, setContent] = useState(selectedPost.content);

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
      post_id: selectedPost.post_id,
      title: title,
      content: content,
      post_date: date,
      post_time: time,
    };

    const requestOptions = {
      method: "PUT",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify(post),
    };

    try {
      await fetch(
        `${API_URL}/edit_post?post_id=${selectedPost.post_id}`,
        requestOptions
      );
      navigate(`/post/${selectedPost.post_id}`);
    } catch (error) {
      console.error(error);
    }
  };

  return (
    <form className="edit-post-form">
      <div>
        <h2>Edit Post</h2>
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

export default EditPost;
