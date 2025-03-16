<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeRepository extends Command
{
    // Định nghĩa tên lệnh và tham số
    protected $signature = 'make:repository {name}';
    protected $description = 'Tạo một Repository với Interface tương ứng';

    /**
     * Xử lý lệnh.
     */
    public function handle()
    {
        // Lấy tham số 'name' từ lệnh
        $name = $this->argument('name');

        // Đường dẫn của Interface và Repository
        $interfacePath = app_path("Repositories/{$name}RepositoryInterface.php");
        $repositoryPath = app_path("Repositories/{$name}Repository.php");

        // Tạo thư mục Repositories nếu chưa tồn tại
        if (!File::isDirectory(app_path('Repositories'))) {
            File::makeDirectory(app_path('Repositories'), 0755, true);
        }

        // Tạo file Interface
        if (!File::exists($interfacePath)) {
            File::put($interfacePath, $this->getInterfaceTemplate($name));
            $this->info("Created Interface: {$interfacePath}");
        } else {
            $this->warn("Interface already exists: {$interfacePath}");
        }

        // Tạo file Repository
        if (!File::exists($repositoryPath)) {
            File::put($repositoryPath, $this->getRepositoryTemplate($name));
            $this->info("Created Repository: {$repositoryPath}");
        } else {
            $this->warn("Repository already exists: {$repositoryPath}");
        }

        // Hướng dẫn đăng ký Repository vào Service Provider
        $this->info("Register the binding in AppServiceProvider:");
        $this->line("  \$this->app->bind({$name}RepositoryInterface::class, {$name}Repository::class);");
    }

    /**
     * Nội dung của Interface.
     */
    private function getInterfaceTemplate($name)
    {
        return <<<EOT
<?php

namespace App\Repositories;

interface {$name}RepositoryInterface
{
    public function getAll();
    public function getById(\$id);
    public function create(array \$data);
    public function update(\$id, array \$data);
    public function delete(\$id);
}
EOT;
    }

    /**
     * Nội dung của Repository.
     */
    private function getRepositoryTemplate($name)
    {
        return <<<EOT
<?php

namespace App\Repositories;

use App\Models\\{$name};

class {$name}Repository implements {$name}RepositoryInterface
{
    protected \$model;

    public function __construct({$name} \$model)
    {
        \$this->model = \$model;
    }

    public function getAll()
    {
        return \$this->model->all();
    }

    public function getById(\$id)
    {
        return \$this->model->find(\$id);
    }

    public function create(array \$data)
    {
        return \$this->model->create(\$data);
    }

    public function update(\$id, array \$data)
    {
        \$item = \$this->model->find(\$id);
        if (\$item) {
            \$item->update(\$data);
            return \$item;
        }
        return null;
    }

    public function delete(\$id)
    {
        return \$this->model->destroy(\$id);
    }
}
EOT;
    }
}
