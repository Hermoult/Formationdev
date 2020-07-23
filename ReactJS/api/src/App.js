import React, { Fragment, useState, useEffect } from 'react';
import axios from 'axios';
import './App.css';
import PostForm from './components/PostForm';

function App() {

  const [data, setData] = useState([]);

  // similaire à "componentDidMount" et "componentDidUpdate"

  useEffect(() => {
    const fetchData = async () => {
      const result = await axios(
        'http://127.0.0.1:8000/api/post'
      );

      setData(result.data);
    };
    fetchData();
  }, [])

  return (
    <Fragment>
      <div className="App">
        <ul>
          <PostForm />
          {data.map(item => (
            <li key={item.id}>
              <p>{item.title}</p>
              <p>{item.content}</p>
            </li>
          ))}
        </ul>

      </div>
    </Fragment>
  );
}

export default App;
