import { Link } from "@inertiajs/inertia-react";

export default function Page() {
    return (
        <div>
            <p className="text-xl">Dashboard</p>
            <Link href={route('react_page')}>Got to Home</Link>
        </div>
    )
}