# docker-minify
Minify JS and CSS

This is a simple docker image that will minify any CSS or javascript file

## Usage

you need to add a new repo to your `.pre-commit-config.yaml`

```
repos:
  - repo: https://github.com/mhzawadi/docker-minify
    rev: v0.0.4
    hooks:
      - id: minify-css-js
```
