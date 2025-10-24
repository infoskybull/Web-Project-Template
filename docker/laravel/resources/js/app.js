import './bootstrap';
import React from 'react';
import { createRoot } from 'react-dom/client';

function App() {
    return (
        <div style={{ textAlign: 'center', marginTop: '50px' }}>
            <h1>Hello from React + Laravel + Docker ??</h1>
        </div>
    );
}

const rootElement = document.getElementById('app');
if (rootElement) {
    createRoot(rootElement).render(<App />);
}