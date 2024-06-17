import React, { Component } from 'react';

class BUTTON extends Component {
    render() {
        return (
            <div>
                <button> CLICK </button>
            </div>
        );
    }
}

// export default BUTTON;
ReactDOM.render(<BUTTON/> , document.getElementById("BUTTON"))
