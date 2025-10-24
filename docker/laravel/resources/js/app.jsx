import './bootstrap';
import React from 'react';
import ReactDOM from 'react-dom/client';

const App = () => {
    return (
        <div>
            <h2>React is working!</h2>
        </div>
    );
};

const root = ReactDOM.createRoot(document.getElementById('react-root'));
root.render(<App />);