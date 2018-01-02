import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Project from './Project';

export default class Projects extends Component {
    constructor() {
        super();

        this.state = {
            projects: []
        };
    }

    async fetchProjects() {
        fetch('http://localhost:3333/api/projects/1').then((response) => {
            return response.json();
        }).then((json) => {
            if(json) {
                this.setState({projects: json.projects});
            }
        });
    }

    componentDidMount() {
        this.fetchProjects();
    }

    render() {
        return (
            <div className="bottom-section">
                <div className="heading">
                    <h2 className="section-text">And some projects I have worked on.</h2>
                </div>
                <div className="rule-of-thirds container">
                    {this.state.projects.map((project, index) => {
                        return <Project key={index} name={project.name} description={project.preview} imagePath={project.imagePath}/>
                    })}
                </div>
            </div>
        );
    }
}

if (document.getElementById('projects')) {
    ReactDOM.render(<Projects />, document.getElementById('projects'));
}
