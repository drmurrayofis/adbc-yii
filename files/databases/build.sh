#!/bin/bash

#
# Finds all *.sql files under the directory tree
# where this script is located and runs sqlite3
# for each script in the same directories.
#
# The output databases are named after the .sql
# files, but have the .sqlite extension.
#
main()
{
    local here=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )
    for i in $(find "$here" -name "*.sql"); do
        sqlite3 "${i}ite" < "$i"
    done

    return 0
}

main $@
