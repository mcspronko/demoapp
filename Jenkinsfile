pipeline {
    agent any

    stages {
        stage('Build') {
            steps {
                echo 'Building...'
                composer install
            }
        }
        stage('Test') {
            steps {
                echo 'Testing...'
                composer test
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying...'
            }
        }
    }
}
