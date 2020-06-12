#!/usr/bin/env bash
git tag -d v1.0.0
git push origin :refs/tags/v1.0.0
git tag -a v1.0.0 -m 'SaferKidsPH v1.0.0'
git push origin master
