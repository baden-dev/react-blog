import { useEffect, useState, useCallback } from "react";
import { useParams,useNavigate  } from "react-router-dom";
import { Link } from "react-router-dom";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faEdit, faTrash } from "@fortawesome/free-solid-svg-icons";
import "../css/Posts.css";

const API_URL = "http://localhost/react-blog/api/index.php";

function SinglePost() {
  const navigate = useNavigate();
  const { post_id } = useParams();

  const [post, setPost] = useState({});

  const getPost = useCallback(async () => {
    const response = await fetch(`${API_URL}/post?post_id=${post_id}`);
    const data = await response.json();
    setPost(data);
  }, [post_id]);

  useEffect(() => {
    const fetchData = async () => {
      await getPost();
    };
    fetchData();
  }, [getPost]);

  const handleDelete = useCallback(async () => {
    const response = await fetch(`${API_URL}/delete_post?post_id=${post_id}`, {
      method: "DELETE",
    });
    if (response.ok) {
      console.log("Post deleted successfully");
      navigate(`/`);
    }
  }, [navigate,post_id]);

  return (
    <div className="post">
      <h2 className="post-title">{post.title}</h2>
      <p className="single-post-content">{post.content}</p>
      <div className="post-footer">
        <Link
          to={`/edit_post/${post.post_id}`}
          state={post}
          className="post-link"
        >
          <FontAwesomeIcon icon={faEdit} /> Edit Post
        </Link>
        <span className="post-timestamp">
          {post.post_date} @{post.post_time}
        </span>
        <button className="delete-btn" onClick={handleDelete}>
          <FontAwesomeIcon icon={faTrash} className="delete-icon" />
        </button>
      </div>
    </div>
  );
}

export default SinglePost;
