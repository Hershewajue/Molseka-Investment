const express = require('express');
const app = express();

app.get('/api/blog', (req, res) => {
  // Retrieve the page number and posts per page from the request query parameters
  const page = parseInt(req.query.page) || 1;
  const limit = parseInt(req.query.limit) || 10; // Adjust the default limit as needed

  // Calculate the offset based on the page and limit
  const offset = (page - 1) * limit;

  // Query your database or data source to fetch the paginated blog posts
  // Adjust this code based on your database or data source implementation
  // Replace `fetchBlogPostsFromDatabase` with your actual function to fetch the posts
  const blogPosts = fetchBlogPostsFromDatabase(offset, limit);

  // Simulate a delay to mimic asynchronous operations
  setTimeout(() => {
    // Construct the JSON response object containing the blog posts
    const response = {
      page: page,
      postsPerPage: limit,
      posts: blogPosts,
    };

    // Send the JSON response
    res.json(response);
  }, 1000); // Adjust the delay as needed
});

const port = 3000; // Replace with your desired port number
app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});
