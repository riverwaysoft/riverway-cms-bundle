@Library('riverway_jenkins') _

pipeline {
    agent any
    stages {
        stage('prepare') {
            steps {
                commitMessage action: 'check'
            }
        }
        stage('Build') {
            when {
                expression { env.FAST_FIX != 'true'  }
            }
            steps {
                sh 'mkdir web/build && echo {} > web/build/manifest.json'
                sh 'composer install --prefer-dist --no-progress --no-suggest  --optimize-autoloader'
            }
        }
        stage('Test') {
            when {
                expression { env.FAST_FIX != 'true' }
            }
            steps {
                sh 'bin/behat -vv'
            }
        }
    }
    post {
        always {
            commitMessage action: 'postProcess'
        }
    }
}