Steps

    Copy the common/thrift directory from the cloudera/impala git project
    wget https://raw.github.com/cloudera/hive/cdh4.3.0-release/metastore/if/hive_metastore.thrift
    wget https://raw.github.com/cloudera/hue/cdh4.3.0-release/apps/beeswax/thrift/include/fb303.thrift
    Modify the include in hive_metastore.thrift to just be 'fb303.thrift'
