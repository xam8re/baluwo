#!/bin/sh
# ref: https://help.github.com/articles/adding-an-existing-project-to-github-using-the-command-line/
#
# Usage example: /bin/sh ./git_push.sh wing328 swagger-petstore-perl "minor update"

xam8re=$1
baluwo=$2
release_note=$3
git_repo_base_url=$4

if [ "$xam8re" = "" ]; then
    xam8re="xam8re"
    echo "[INFO] No command line input provided. Set \$xam8re to $xam8re"
fi

if [ "$baluwo" = "" ]; then
    baluwo="baluwo"
    echo "[INFO] No command line input provided. Set \$baluwo to $baluwo"
fi

if [ "$release_note" = "" ]; then
    release_note="Minor update"
    echo "[INFO] No command line input provided. Set \$release_note to $release_note"
fi

if [ "$git_repo_base_url" = "" ]; then
    git_repo_base_url="https://github.com"
    echo "[INFO] No command line input provided. Set \$git_repo_base_url to $git_repo_base_url"
fi

# Initialize the local directory as a Git repository
git init

# Adds the files in the local repository and stages them for commit.
git add .

# Commits the tracked changes and prepares them to be pushed to a remote repository.
git commit -m "$release_note"

# Sets the new remote
git_remote=`git remote`
if [ "$git_remote" = "" ]; then # git remote not defined

    if [ "$GIT_TOKEN" = "" ]; then
        echo "[INFO] \$GIT_TOKEN (environment variable) is not set. Using the git credential in your environment."
        git remote add origin ${git_repo_base_url}/${xam8re}/${baluwo}.git
    else
        git_repo_base_url=${git_repo_base_url#*//}
        git_repo_base_url=${git_repo_base_url%%.*}
        git remote add origin https://${xam8re}:${GIT_TOKEN}@${git_repo_base_url}.com/${xam8re}/${baluwo}.git
    fi

fi

git pull origin master

# Pushes (Forces) the changes in the local repository up to the remote repository
echo "Git pushing to https://${git_repo_base_url}.com/${xam8re}/${baluwo}.git"
git push origin master 2>&1 | grep -v 'To https'

