
for file in *
do 
if [[ $file == *~ ]]
    then
        rm $file
fi
done


