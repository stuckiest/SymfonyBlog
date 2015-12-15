template "#{node['nginx']['dir']}/sites-available/#{node['app']['app']['site_name']}.conf" do
  source "web_app.conf.erb"
  mode "0644"
end

["fpm", "cli"].each do |env|
  template "/etc/php5/#{env}/php.ini" do
    source "php.ini.erb"
    cookbook "php"
    variables({
      :directives => node[:php][:directives]
    })
  end
end

template "#{node['app']['app']['home']}/app/config/parameters.yml" do
  source "parameters.yml.erb"
  mode "0644"
end

nginx_site "#{node['app']['app']['site_name']}.conf"
