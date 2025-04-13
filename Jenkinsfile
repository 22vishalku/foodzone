pipeline {
    agent any

    environment {
        OPENAI_API_KEY = credentials('OPENAI_API_KEY') // Jenkins credentials ID
    }

    stages {
        stage('Checkout') {
            steps {
                git url: 'https://github.com/22vishalku/Code-Review-CI-CD.git', branch: 'main'
            }
        }

        stage('Install Dependencies') {
            steps {
                sh 'npm install'
            }
        }

        stage('Run AI Code Reviewer') {
            steps {
                sh 'node src/ai-reviewer.js'
            }
        }
    }
}
