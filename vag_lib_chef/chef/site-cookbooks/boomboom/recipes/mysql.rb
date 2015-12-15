mysql_connection_info = {
  :host     => node['app']['db_site']['host'],
  :username => 'root',
  :password => node['mysql']['server_root_password']
}

mysql_database node['app']['db_site']['name'] do
  connection mysql_connection_info
  action :create
end

mysql_database_user node['app']['db_site']['user'] do
  connection mysql_connection_info
  password   node['app']['db_site']['password']
  action     :create
end

mysql_database_user node['app']['db_site']['user'] do
  connection    mysql_connection_info
  password      node['app']['db_site']['password']
  database_name node['app']['db_site']['name']
  host          '%'
  privileges    [:all]
  action        :grant
end
