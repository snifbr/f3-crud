#!/bin/bash
set -ex

mysql ${mysql_flags} ${MYSQL_DATABASE} < mysql-init/users.sql
