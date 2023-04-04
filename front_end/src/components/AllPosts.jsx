import { useEffect, useState } from "react";
import React from "react";
import { Link } from "react-router-dom";
import "../css/Posts.css";

const API_URL = "http://localhost/react-blog/api/index.php";

function AllPosts() {
  const [posts, setPosts] = useState([]);

  const getAllPosts = async () => {
    const response = await fetch(`${API_URL}/posts`);
    const data = await response.json();
    console.log(data);
    setPosts(data);
  };

  useEffect(() => {
    getAllPosts();
  }, []);

  return (
    <>
      {posts?.length > 0 ? (
        <div>
          {posts.map((post) => (
            <div className="post" key={post.post_id}>
              <h2 className="post-title">{post.title}</h2>
              <p className="post-content">{post.content}</p>
              <div className="post-footer">
                <Link to={`/post/${post.post_id}`} className="post-link">
                  View Post
                </Link>
                <span className="post-timestamp">
                  {post.post_date} @{post.post_time}{" "}
                </span>
              </div>
            </div>
          ))}
        </div>
      ) : (
        <div className="empty">
          <h2>No posts found</h2>
        </div>
      )}
    </>
  );
}

export default AllPosts;
