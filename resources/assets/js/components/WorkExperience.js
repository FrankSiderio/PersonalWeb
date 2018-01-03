import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class WorkExperience extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        // Because we want to alternate css classes
        if(this.props.count % 2 == 0) {
            var cName = "section";
        } else {
            var cName = "dark-section";
        }
        return (
            <div id={this.props.company} className={cName}>
                <div className="container">
                    <div className="left-right">
                        <div className="content">
                            <h2 className="name">{this.props.position} at {this.props.company}</h2>
                            <p>{this.props.description}</p>
                            <div className="button-container">
                                <a className="button btn-component" target="_blank" href={this.props.url}>See Work</a>
                            </div>
                        </div>

                        <div className="image-container">
                            <img className="img-responsive" src={this.props.imagePath}/>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}
