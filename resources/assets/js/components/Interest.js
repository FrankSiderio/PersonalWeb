import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Interest extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div className="card">
                <img className="img-responsive" src={this.props.imagePath}/>
                <div className="text-container">
                    <div className="text">
                        <h4 className="name">{this.props.title}</h4><br></br>
                        <span>{this.props.description}</span>
                    </div>
                </div>
            </div>
        );
    }
}
