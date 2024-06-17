import React, { useState } from "react";
import { createRoot } from 'react-dom/client';

export default function Counter() {
  // Set the initial count state to zero, 0
  const [count, setCount] = useState(0);

  // Create handleIncrement event handler
  const handleIncrement = () => {
    setCount(prevCount => prevCount + 1);
  };

  // Create handleDecrement event handler
  const handleDecrement = () => {
    setCount(prevCount => prevCount - 1);
  };

  return (
    <div>
        <button onClick={handleDecrement}>-</button>
        <span> {count} </span>
        <button onClick={handleIncrement}>+</button>
    </div>
  );
}

if (document.getElementById('counter')) {
    const root = createRoot(document.getElementById('counter'));
    root.render(<Counter />);
}
