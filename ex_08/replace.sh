#!/bin/bash
$@test = $1;
friends = $2;
buddies = $3;
sed -i "s/$2/$3/g" $1;


