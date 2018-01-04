import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import WorkExperiencePreview from './WorkExperiencePreview';

export default class WorkExperiencesPreview extends Component {
    constructor() {
        super();

        this.state = {
            experiences: []
        };
    }

    async fetchExperiences() {
        fetch('http://34.239.44.186:3333/api/work/1').then((response) => {
            return response.json();
        }).then((json) => {
            if(json) {
                this.setState({experiences: json.workExperience});
            }
        });
    }

    componentDidMount() {
        this.fetchExperiences();
    }

    render() {
        return (
            <div className="top-section">
                <div className="heading">
                    <h2 className="section-text">A little bit about what I do.</h2>
                </div>
                <div className="rule-of-thirds container">
                    {this.state.experiences.map((exp, index) => {
                        return <WorkExperiencePreview key={index} position={exp.position} company={exp.company} description={exp.preview} imagePath={exp.previewImagePath}/>
                    })}
                </div>
            </div>
        );
    }
}

if (document.getElementById('experiences-preview')) {
    ReactDOM.render(<WorkExperiencesPreview />, document.getElementById('experiences-preview'));
}
