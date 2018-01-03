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
            <div>
                {this.state.projects.map((project, index) => {
                    return <Project key={index} count={index} name={project.name} description={project.description} imagePath={project.imagePath} url={project.url}/>
                })}
            </div>

        );
    }
}

if (document.getElementById('projects')) {
    ReactDOM.render(<Projects />, document.getElementById('projects'));
}
