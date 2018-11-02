# Updating from Upstream

```console
cd /path/to/this/repository
git checkout upstream-releases
git rm -r phplist
mkdir phplist
tar xf ~/path/to/phplist/release/phplist-x.y.z.tgz --exclude='*.gitignore' --strip 1  -C phplist
git add phplist
git commit -m "phplist-x.y.z.tgz"
git tag vx.y.z
```

# Merging Upstream to Master

```console
git checkout master
git merge vx.y.z
git tag vx.y.z-digiges
```

# Push to Repository

```console
git push origin upstream-releases master --tags
```
