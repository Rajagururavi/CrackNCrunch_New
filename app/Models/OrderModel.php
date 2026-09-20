<?php
    namespace App\Models;
    use CodeIgniter\Model;
    class OrderModel extends Model
    {
        protected $table = 'orders';
        protected $primaryKey = 'id';
        protected $returnType = 'array';
        protected $useAutoIncrement = true;
        protected $allowedFields = [
            'user_id',
            'order_number',
            'product_name',
            'product_image',
            'weight',
            'quantity',
            'subtotal',
            'payment_method',
            'upi_transaction_id',
            'order_status'
        ];
        protected $useTimestamps = true;
        protected $createdField = 'created_at';
        protected $updatedField = '';
        public function getOrders()
        {
            return $this->db->table('orders o')
            ->select('
                o.order_number,
                o.subtotal,
                o.payment_method,
                o.order_status,
                o.created_at,
                u.full_name,
                u.mobile
            ')
            ->join('users u', 'u.id = o.user_id')->orderBy('o.created_at', 'DESC')->get()->getResultArray();
        }
        public function getOrderStatus()
        {
            $revenue = $this->where('order_status !=', 'Cancelled')->selectSum('subtotal')->first();
            return [
                'processing' => $this->where('order_status', 'Processing')->countAllResults() ?? 0,
                'pending'    => $this->where('order_status', 'Pending')->countAllResults() ?? 0,
                'shipping'   => $this->where('order_status', 'Shipping')->countAllResults() ?? 0,
                'delivered'  => $this->where('order_status', 'Delivered')->countAllResults() ?? 0,
                'cancelled'  => $this->where('order_status', 'Cancelled')->countAllResults() ?? 0,
                'revenue'    => $revenue['subtotal'] ?? 0,
                'total_orders'=> $this->countAll()
            ];
        }
        public function getOrdersByStatus($status)
        {
            return $this->db->table('orders o')
            ->select('
                o.order_number,
                o.subtotal,
                o.order_status,
                o.created_at,
                u.full_name
            ')
            ->join('users u', 'u.id = o.user_id')->where('o.order_status', $status)->orderBy('o.created_at', 'DESC')->get()->getResultArray();
        }
    }