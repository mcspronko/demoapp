pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                echo 'Building...'
                sh 'composer install'
            }
        }
        stage('Test') {
            steps {
                echo 'Testing...'
                sh 'composer test'
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying...'
            }
        }
    }
}
