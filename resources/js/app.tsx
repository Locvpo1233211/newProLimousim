import React from 'react';
import { createRoot } from 'react-dom/client';

function End(){
    return (
        <div>ji two oooohH</div>
    );
}

function App() {
    return (
        <div>
            <h1>Xin chào từ React trong Laravesssssssssssssl!</h1>
        </div>
    );
}

const goot = createRoot(document.getElementById('goot'));
const root = createRoot(document.getElementById('root'));
root.render(<App />);
goot.render(<End />);
