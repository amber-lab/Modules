## GCloud CLI
### Setup
	- Linux Mint

### Setup

```sh
# Download
curl -O https://dl.google.com/dl/cloudsdk/channels/rapid/downloads/google-cloud-sdk-337.0.0-linux-x86_64.tar.gz
# Extraction 
tar -xvf google-cloud-sdk-337.0.0-linux-x86_64.tar.gz
# Setup configuration
export CLOUDSDK_PYTHON=python3.9
# run Setup
./install.sh
# glcloud init
./google-cloud-sdk/bin/gcloud init
```


### Configuration Examples
```sh
# Set python interpreter
export CLOUDSDK_PYTHON=python3.9
# Set main project
export CLOUDSDK_CORE_PROJECT=my-project
# 
```


### Cli commands
```sh
# Inicialize gcloud project and user configuration 
gcloud init
# List gcloud users
gcloud auth list
# List gcloud configurations
gcloud config list
# list gcloud information
gcloud info
# help
gcloud help compute instances create
```