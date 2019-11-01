#!/usr/bin/env bash

# First build AMD64 image:
echo "$DOCKER_PASSWORD" | docker login -u "$DOCKER_USERNAME" --password-stdin

if [ "$TRAVIS_BRANCH" == "develop" ]; then
    echo "Build develop amd64"
    docker build -t jc5x/firefly-iii:develop-amd64 -f Dockerfile.amd64 .
    docker tag jc5x/firefly-iii:develop-amd64 jc5x/firefly-iii:develop-$VERSION-amd64
    docker push jc5x/firefly-iii:develop-amd64
    docker push jc5x/firefly-iii:develop-$VERSION-amd64
fi

if [ "$TRAVIS_BRANCH" == "master" ]; then
    echo "Build master amd64"
    docker build -t jc5x/firefly-iii:latest-amd64 -f Dockerfile.amd64 .
    docker tag jc5x/firefly-iii:latest-amd64 jc5x/firefly-iii:release-$VERSION-amd64
    docker push jc5x/firefly-iii:latest-amd64
    docker push jc5x/firefly-iii:release-$VERSION-amd64
fi

# Then build ARM image (not 64 bits)

docker run --rm --privileged multiarch/qemu-user-static:register --reset

# get qemu-arm-static binary
mkdir tmp
pushd tmp && \
curl -L -o qemu-arm-static.tar.gz https://github.com/multiarch/qemu-user-static/releases/download/v2.6.0/qemu-arm-static.tar.gz && \
tar xzf qemu-arm-static.tar.gz && \
popd

if [ "$TRAVIS_BRANCH" == "develop" ]; then
    echo "Build develop arm"
    docker build --tag jc5x/firefly-iii:develop-arm --file Dockerfile.arm .
    docker tag jc5x/firefly-iii:develop-arm jc5x/firefly-iii:develop-$VERSION-arm
    docker push jc5x/firefly-iii:develop-arm
    docker push jc5x/firefly-iii:develop-$VERSION-arm
fi

if [ "$TRAVIS_BRANCH" == "master" ]; then
    echo "Build master arm"
    docker build --tag jc5x/firefly-iii:latest-arm --file Dockerfile.arm .
    docker tag jc5x/firefly-iii:latest-arm jc5x/firefly-iii:release-$VERSION-arm
    docker push jc5x/firefly-iii:latest-arm
    docker push jc5x/firefly-iii:release-$VERSION-arm
fi