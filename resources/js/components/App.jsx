import React from 'react';
import ReactDOM from 'react-dom/client';
import './App.css';
import Header from './Header';
import Main from './Main';
import Footer from './Footer';

function App() {
  return (
    <div className="App">
      <Header/>
      <Main/>
      <Footer/>
    </div>
  );
}

// export default App;
const root = ReactDOM.createRoot(document.getElementById('app'));
root.render(<App />);
