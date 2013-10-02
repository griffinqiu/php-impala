Steps

    Copy the common/thrift directory from the cloudera/impala git project
    wget https://raw.github.com/cloudera/hive/cdh4.3.0-release/metastore/if/hive_metastore.thrift
    wget https://raw.github.com/cloudera/hue/cdh4.3.0-release/apps/beeswax/thrift/include/fb303.thrift
    wget https://github.com/colinmarc/impala-ruby/raw/fbfb4f57266d9d9f9199ccdee14ce83b16d07ee4/thrift/Opcodes.thrift
    Modify the include in hive_metastore.thrift to just be 'fb303.thrift'
    Namespace everything with 'namespace php ...'
    for x in thrift/*.thrift; do thrift -gen php -out lib $x; done
    cp ~/src/thrift/lib/php/lib/Thrift/ lib/Thrift -r
