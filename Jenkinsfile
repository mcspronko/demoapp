pipeline {
  agent any
  stages {
    stage('Build') {
      steps {
        echo 'Building...'
        sh 'composer install'
      }
    }
    stage('Unit Test') {
      parallel {
        stage('Unit Test') {
          steps {
            echo 'Testing..'
            sh 'composer test'
          }
        }
        stage('Integration Tests') {
          steps {
            sh 'composer test'
          }
        }
      }
    }
    stage('Deploy') {
      steps {
        echo 'Deploying..'
      }
    }
  }
  post {
      always {
        archiveArtifacts artifacts: 'build/*.xml', fingerprint: true
      }
  }
}